<?php 

$variable = 1;
switch ($variable) {
        case '1':
        print('Si se ejecuto');
        break;
    
    default:
        case '2':
        case '3':
        case '4':
        case '5':
            print("Case multiple");
        break;

    default:
    print("No se ejecuto");
    break;
}

// endswitch se puede usar en lugar de las llaves


?>