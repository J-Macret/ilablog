<?php

class Form {
    
    private $datas = [];
    
    public function __construct($datas = [])
    {
        $this->datas = $datas;
    }
    
    
    
    private function input($type, $name, $label) {
        $value = "";
        if(isset($this->datas[$name]))
        {
            $value = $this->datas[$name];
        }
        
        if($type == 'textarea') {
            $input = "<textarea required name=\"$name\" class=\"form-control\" id=\"input$name\" value=\"\">$value</textarea>";
        } else {
           $input = "<input required type=\"$type\" name=\"$name\" class=\"form-control\" id=\"input$name\" value=\"$value\">";
        }
        
        return "<div class=\"form-groupe\">
                        <h1 class=\"form-h1\"><label for=\"input$name\">$label</label></h1>
                        $input;
                    </div>";
    }
    
    public function text($name, $label) 
    {
        return $this->input('text', $name, $label);
    }
    
    public function email($name, $label) 
    {
        return $this->input('email', $name, $label);

    }
    
    public function textarea($name, $label) 
    {
        return $this->input('textarea', $name, $label);
    }
}