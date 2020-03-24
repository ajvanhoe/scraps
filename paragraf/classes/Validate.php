<?php

class Validate
{
    private $_passed = false,
            $_errors = array(),
            $_db = null;


    public function __construct()
    {
        $this->_db = DB::getInstance();
    }

    public function check($source, $items = array())
    {
        foreach ($items as $item => $rules)
        {
            foreach ($rules as $rule => $ruleValue)
            {
                $value = trim($source[$item]);
                //$item = escape($item);

                if ($rule === 'required' && empty($value))
                {
                    $this->addError("{$item} je potrebno uneti!");
                }
                else if (!empty($value))
                {
                    switch($rule)
                    {
                        case 'min':
                            if (strlen($value) < $ruleValue)
                            {
                                $this->addError("{$item} mora imati minimum od {$ruleValue} karaktera.");
                            }
                            break;

                        case 'max':
                            if (strlen($value) > $ruleValue)
                            {
                                $this->addError("{$item} ima maximum od {$ruleValue} karaktera.");
                            }
                            break;

                        case 'matches':
                            if ($value != $source[$ruleValue])
                            {
                                $this->addError("{$ruleValue} se mora poklapati sa {$item}");
                            }
                            break;

                        case 'unique':
                            $check = $this->_db->get($ruleValue, array($item, '=', $value));

                            if ($check->count())
                            {
                                $this->addError("{$item} postoji.");
                            }
                            break;

                        case 'notafter':
                            if ($value > $ruleValue)
                            {
                                $this->addError("Nažalost vaša polisa ne pokriva putovanje unazad kroz vreme!");
                            }
                            break;
                    }
                }
            }
        }

        if (empty($this->_errors))
        {
            $this->_passed = true;
        }

        return $this;
    }

    private function addError($error)
    {
        $this->_errors[] = $error;
    }

    public function errors()
    {
        return $this->_errors;
    }

    public function passed()
    {
        return $this->_passed;
    }
}
