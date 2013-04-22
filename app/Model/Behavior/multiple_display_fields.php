 <?php 
class MultipleDisplayFieldsBehavior extends ModelBehavior {
    var $config = array();
    
    function setup(&$model, $config = array()) {
        $default = array(
            'fields' => array($model->name.'.bankname', $model->name.'.name'),
            'pattern' => '%s %s'
        ); 
        $this->config[$model->name] = $default;
        
        if(isset($config['fields'])) {
            $this->config[$model->name]['fields'] = $config['fields'];
        }
        if(isset($config['pattern'])) {
            $this->config[$model->name]['pattern'] = $config['pattern'];
        }
    }
    
    function afterFind(&$model, $results) {
        // if displayFields is set, attempt to populate
        foreach ($results as $key => $val) {
            $displayFieldValues = array();

            if (isset($val[$model->name])) {
                // ensure all fields are present
                $fields_present = true;
                foreach ($this->config[$model->name]['fields'] as $field) {
                    if (array_key_exists($field,$val[$model->name])) {
                        $fields_present = $fields_present && true;
                        $displayFieldValues[] = $val[$model->name][$field]; // capture field values
                    } else {
                        $fields_present = false;
                        break;
                    }
                }

                // if all fields are present then set displayField based on $displayFieldValues and displayFieldPattern
                if ($fields_present) {
                    $params = array_merge(array($this->config[$model->name]['pattern']), $displayFieldValues);
                    $results[$key][$model->name][$model->displayField] = call_user_func_array('sprintf', $params );
                }
            }
        }
        return $results;
    }


    function beforeFind(&$model, &$queryData) {
        if(isset($queryData["list"])) {
            $queryData['fields'] = array();
            
            //substr is used to get rid of "{n}" fields' prefix...
            array_push($queryData['fields'], substr($queryData['list']['keyPath'], 4));
            foreach($this->config[$model->name]['fields'] as $field) {
                array_push($queryData['fields'], $model->name.".".$field);
            }
        }
        //$model->varDump($queryData);
        return $queryData;
    }
}
?> 