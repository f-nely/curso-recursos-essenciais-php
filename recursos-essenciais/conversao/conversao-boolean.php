<?php

/*
 *Ao converter para booleano, os seguintes valores são considerados FALSE:

    Um valor booleano FALSE.
    Um inteiro 0 (zero).
    Um ponto flutuante 0.0 (zero).
    Uma string vazia e a string "0".
    Um array sem elementos.
    O tipo especial NULL (incluindo variáveis não definidas).
    O objeto SimpleXML criado de tags vazias. (SimpleXML será aprendido no módulo avançado de PHP.).

 */

// é considerado false
var_dump((bool)FALSE);

var_dump((bool)0);

var_dump((bool)0.0);

var_dump((bool)"");

var_dump((bool)"0");

var_dump((bool)[]);

var_dump((bool)NULL);

// qualquer outro valor é retornado true
var_dump((bool)TRUE);

var_dump((bool)1);

var_dump((bool)-1);

var_dump((bool)1.5e2);

var_dump((bool)1.5);

var_dump((bool)"1");

var_dump((bool)"TreinaWeb");

var_dump((bool)"TRUE");

var_dump((bool)"FALSE");

var_dump((bool)['Zend']);

