<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task #2</title>
</head>
<body>
    <?php
    interface Ival
    {
        function addStyles(array $arr);
        function show();
    }
    
    trait Input 
    {
        public function show() {
            echo $this->_html;
        }

        public function addStyles(array $arr) {
            foreach ($arr as $key => $value) {
                $this->_html .= "$key: $value; ";
            }

            $style = $this->_html;
            $this->_html = substr($style, 0, strlen($style) - 1) . '">';
        }
    }
    
    class InputEmail implements Ival
    {
        public $_html = '<input placeholder="Введите почту" type="email" style="';

        use Input;
    }

    class InputFile implements Ival 
    {
        public $_html = '<input type="file" style="';

        use Input;
    }

    class InputText implements Ival {
        public $_html = '<input placeholder="Hello, zaibal" type="text" style="';

        use Input;
    }

    $inputText = new InputText();
    $inputEmail = new InputEmail();
    $inputFile = new InputFile();

    $inputText->addStyles([
        'color' => 'black',
        'border' => '1px solid orange',
        'border-radius' => '5px',
        'font-size' => '24px',
        'background' => 'skyblue'
    ]);
    
    $inputEmail->addStyles([
        'color' => 'black',
        'border' => '1px solid orange',
        'border-radius' => '5px',
        'font-size' => '24px',
        'background-color' => 'SkyBlue'
    ]);

    $inputFile->addStyles([
        'color' => 'red',
        'background-color' => 'black',
        'border-radius' => '2px',
        'font-size' => '24px'
    ]);

    $inputText->show();
    echo '<br><br>';
    $inputEmail->show();
    echo '<br><br>';
    $inputFile->show();
    ?>
</body>
</html>