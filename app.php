<?php

require __DIR__ . '/vendor/autoload.php';

// use Rodrigo\OopPhp\Classes\PessoaFisica;

// Usando namespace definido com nome diferente
// use Rodrigo\OopPhp\Classes\PessoaFisica as PesFis;

// use Rodrigo\OopPhp\Metodos\Banco;

//use Rodrigo\OopPhp\TipagemEstatica\PessoaFisica;

//use Rodrigo\OopPhp\GettersSetters\Carro;

// use Rodrigo\OopPhp\Construtores\Animal;

// use Rodrigo\OopPhp\ThisSelf\PessoaFisica;

// use Rodrigo\OopPhp\Heranca\PessoaFisica;
// use Rodrigo\OopPhp\Heranca\PessoaJuridica;

// use Rodrigo\OopPhp\ClassesAbstratas\Pessoa;
// use Rodrigo\OopPhp\ClassesAbstratas\PessoaFisica;
// use Rodrigo\OopPhp\ClassesAbstratas\PessoaJuridica;

// use Rodrigo\OopPhp\Visibilidade\Pessoa;
// use Rodrigo\OopPhp\Visibilidade\PessoaFisica;
// use Rodrigo\OopPhp\Visibilidade\PessoaJuridica;

// use Rodrigo\OopPhp\Traits\ContaBancaria;
// use Rodrigo\OopPhp\Traits\Pessoa;

// use Rodrigo\OopPhp\DTO\PessoaDTO;

// use Rodrigo\OopPhp\InstanceOf\PessoaInterface;

// use Rodrigo\OopPhp\Enums\Produto;
// use Rodrigo\OopPhp\Enums\Teams;

// use Rodrigo\OopPhp\Exceptions\Email;

use Rodrigo\OopPhp\MetodosMagicos\PessoaFisica;

//$pessoa = new \Rodrigo\OopPhp\Classes\PessoaFisica(); Instanciando Objeto com namespace

//$pessoa = new PesFis(); Instanciando objeto com nome personalizado

//Criando objeto (instanciando)
/*
$pessoa = new PessoaFisica();

Definindo atributos públicos
$pessoa -> nome = "Rodrigo";
$pessoa -> idade = 18;
$pessoa -> data_nasc = 110229;
$pessoa -> endereco = "Rua das Bromélias";
*/

//Testando Métodos
/*
$banco = new Banco();

$banco-> depositarDinheiro(100);
echo "Saldo: " . $banco-> capturarSaldo();

$banco-> sacarDinheiro(20);
echo "\nSaldo: " . $banco-> capturarSaldo();
*/

/*Testando Tipagem Estática
$pessoa = new PessoaFisica();

$pessoa-> id = 01;
$pessoa-> nome = 'Rodrigo';
$pessoa-> idade = 27;
//Gera conversão implícita
$pessoa-> idade = '27';
//$pessoa-> idade = 'Eu tenho 27 anos'; Tipagem impede de haver outros tipos como String
$pessoa-> CPF = "98765432100";

echo 'Id da pessoa: ' . $pessoa-> exibirId() . "\n";
*/

//$carro = new Carro();

//Heredoc da linguagem PHP são strings com delimitadores ("aspas") identificados
//Para chamar métodos em strings utilize {$classe-> metodo()}

/* Testando Getters e Setters
echo (<<<CARRO_IMPRESSÃO
Id do Carro: {$carro-> getId()}
Marca do Carro: {$carro-> getMarca()}
Modelo do Carro: {$carro-> getModelo()}

CARRO_IMPRESSÃO);

$carro-> id = 1;
$carro-> setId(1);
$carro-> setMarca('Toyota');
$carro-> setModelo('Camry');
*/

/*Testando Construtores
$nome_animal = "Josemias";
$especie_animal = "Cachorro";
$idade_animal = 5;

$animal = new Animal(
    $nome_animal,
    $especie_animal,
    $idade_animal
);*/

/* Testando métodos estáticos com $this e self::$atributo;

//Construtor aumenta em 1 o ID
$pessoa = new PessoaFisica(
    'Rodrigo',
    22,
    '9321854632'
);

// PessoaFisica::exibirId(); Pode chamar métodos estáticos sem ser instanciado
// PessoaFisica-> exibirNome(); Não pode chamar métodos

//Exibindo com método estático
PessoaFisica::exibirIdComStatic();
//$PessoaFisica-> exibirIdSemStatic(); Variável indefinida
//PessoaFisica-> exibirIdSemStatic(); Não aceita objeto null

// Acessando atributo estático no objeto instanciado
// $pessoa-> exibirIdSemStatic(); Não consegue acessar por não ser método estático - obs: acesso feito com $this

$pessoa::exibirIdComStatic();

// Mudando através do set com self sem ser método estático
// $pessoa-> setIdSemStatic(1);

// Mudando através do set com self com método estático
// ID mudado para 2
$pessoa::setIdComStatic(2);

// Ambos acima geram o mesmo resultado

// Muda também na classe
PessoaFisica::exibirIdComStatic();
$pessoa::exibirIdComStatic();
$pessoa-> exibirNome(); //Método normal

//Testando Get com Métodos Estáticos

// Funciona normalmente
echo "\nAtrib Static com Get sem Static: {$pessoa-> getIdSemStatic()}";

//Funciona normalmente
echo "\nAtrib Static com Get com Static: {$pessoa::getIdComStatic()} \n";

//ID aumentou em 1
$pessoa02 = new PessoaFisica(
    'Gabriela',
    21,
    '03219432100'
     );

//Construtor aumenta em 1 o ID para todos os objetos:
$pessoa02::exibirIdComStatic();
*/

/*Testando Herança Simples



//Objeto pessoa de PessoaFisica
$pessoa = new PessoaFisica();
$pessoa-> setId(1);
$pessoa-> setNome('Rodrigo');
$pessoa-> setIdade(18);
$pessoa-> setGenero('M');

$empresa = new PessoaJuridica();
$empresa-> setId(1);
$empresa-> setNome('Rodrigo');
$empresa-> setIdade(5);
$empresa-> setGenero('I');

//Empresa herda características de PessoaFisica, portanto é também uma instância
if($empresa instanceof PessoaFisica){
    echo 'Objeto empresa é instância de PessoaFisica';
}
else{
    echo 'Objeto empresa não é instância de PessoaFisica';
}*/

/*Testando Classes Abstratas

//$pessoa = new Pessoa(); Não consegue instanciar classe abstrata
$pessoa = new PessoaFisica();
$empresa = new PessoaJuridica();

$pessoa-> setId(1);
$pessoa-> setNome('Rodrigo');
$pessoa-> setIdade(18);
$pessoa-> setGenero('98765432100');
$pessoa-> setDocument('98765432100');

$empresa-> setId(2);
$empresa-> setNome('Sony');
$empresa-> setDocument('012301203012312030');

// function verificarInstanciaPessoa($objeto): bool{

// }

// Aplicação de métodos estáticos sobre a classe abstrata
Pessoa::instancia($pessoa);
Pessoa::instancia($empresa);

//Com a tipagem já verifica se é da classe Pessoa
function getName(Pessoa $classe){
    $classe-> exibirNome();
    return $classe-> getNome();
}

//Acessando nome do objeto
getName($pessoa);
getName($empresa);
*/

/*Testando Visibilidade de métodos e atributos

*/

//Construtor de Classe Abstrata
// $pessoa = new PessoaFisica(
//     1,
//     'Rodrigo',
//     18,
//     'M',
//     ''
// );

// $empresa = new PessoaJuridica(
//     02,
//     'JohnnyDevs',
//     '00.00001/23154'
// );

//$pessoa::instancia($empresa); Não quero que as classes filhas tenham acesso ao método instancia. Aqui o que acontece é a execução do método na classe abstrata, não na classe PessoaFisica
//$pessoa::instancia($empresa); Chamada com o método privado impede seu acesso

// Pessoa::instancia($pessoa);

//Métodos públicos consegue acessar nas classes filhas
// $pessoa->setId(5);
// $pessoa->setNome('José');

//Melhor vardumper, do Symphony
//No dump, + significa público
//No dump, - significa privado
// dump($pessoa);
// dump($empresa);

// --------------------
// Properties Promotions
// --------------------

// Cria atributos a partir do construtor
// $pessoa = new Pessoa('Rodrigo', 18, '00011122233');

// itera sobre o valor de cada um dos atributos, não funciona exibindo a propriedade do objeto/*  */
// foreach($pessoa as $propriedade => $atributo){
//     echo $atributo . PHP_EOL;
// }

// --------------------
// Traits
// --------------------

// Traits são propriedades e métodos que são adicionados a uma classe por meio da palavra-chave use em PHP.
// Em outras palavras, seriam como adereços, acessórios ou super-poderes que são dados para uma determninada classe.
// $pessoa = new Pessoa('Rodrigo',
//     new DateTime(),
//     '00011122333',
//     '0000-0',
//     '00011122'
// );

// $contaBancaria = new ContaBancaria($pessoa, '1000');
// dump($contaBancaria);

// --------------------
// stdClass
// --------------------

// $pessoa = new stdClass();
// $pessoa->nome = 'Rodrigo';
// $pessoa->idade = 18;
// $pessoa->documento = '12312312322';

// dump($pessoa);

// $apiData = <<<JSON_TEXT
//     {
//         "nome": "Rodrigo",
//         "idade": 18,
//         "documento": "1112223_3333"
//     }
// JSON_TEXT;

// $data = json_decode($apiData);

// dump($data);
// dump($data->name);
// dump($data->age);
// dump($data->document);

// $pessoa = new PessoaDTO(json_decode($apiData));

// dump($pessoa);

// --------------------
// Classes Anônimas
// --------------------

// $jovem = new class (json_decode(
//     <<<JSON
//     {
//         "nome": "Enzo Henrigue da Silva",
//         "idade": 14,
//         "documento": "cpf"
//     }
//     JSON
// )) extends PessoaDTO{

//     private float $hormonios = 0;
//     private bool $rebeldia = false;

//     public function puberdade(){
//         $this->hormonios += 100;

//         echo "Minha voz está grossa..." . PHP_EOL;
//     }

//     public function tornarRebelde(){
//         $this->rebeldia = true;

//         echo "Pô, mãe, deixa eu sair de casa!! RAwhhhrhrr"  . PHP_EOL;
//     }
// };

// $jovem->puberdade();

// $jovem->tornarRebelde();

// dump($jovem);

// --------------------
// Instance Of
// --------------------

// $pessoa1 = new Pessoa();

// $pessoa1->nome = "João";

// $pessoa2 = new Pessoa();

// $pessoa2->nome = "Joaquina";

// $pessoa2->tocar($pessoa1);
// if(!$pessoa1 instanceof PessoaInterface){
//     $pessoa2->sentirGosto($pessoa1);

// }

// $objeto = new stdClass();
// $objeto->nome = "Cadeira";

// $pessoa1->falar();

// $pessoa2->sentirGosto($objeto);

// --------------------
// Enums
// --------------------

// Pure Case Enums //
// $produto = new Produto('PS5', 5000, EstadoPedido::EsperaDePagamento);

// dump($produto);

// $produto->verificarEstado();

// $produto->pagar(5000)
//     ->verificarEstado();

// function pick_a_day(DiaDaSemana $diaDaSemana){
//     echo $diaDaSemana->name;
// }

// pick_a_day('Segunda'); Erro de tipo string
// pick_a_day(DiaDaSemana::SegundaFeira);
// pick_a_day(DiaDaSemana::Domingo->name); Gera erro pois não é do ENUM DiaDaSemana

// BackedEnums //

// Pode obter valores traduzindo de um banco de dados
// $registro = [
//     'pais'  => 'Brasil',
//     'times' => [
//         'sp', 'b', 'v', 'st',
//     ],
// ];

// $dadosBd = $registro['times'][0];

// $time = Teams::from($dadosBd);
// dump($time);

// $mensagem = match($time){
//     Teams::SaoPaulo => 'Eu sou Paulista!!!',
//     Teams::Bahia => 'Bora Bahea minha p@!@#',
//     Teams::Vitoria => 'Bora Vitória!!!',
//     Teams::Santos => 'Bora Neymar!!!'
// };

// echo $mensagem . PHP_EOL;

// echo $time->value;

// $dadosBd = 'pl';

// $time = Teams::tryFrom($dadosBd) ?? 'Não existe';

// dump($time);

// // 


// --------------------
// Exceptions
// --------------------

// try{
//     $email = new Email('email@a.c');
    
// } catch(Exception $e){
//     echo $e->getMessage(); 
// }

// echo $email;


// --------------------
// Métodos Mágicos __construct e __destruct
// --------------------

// $pessoa = new PessoaFisica('Rodrigo', 22, '00011122243');

// try{
//     echo $pessoa;

// } catch(Error $e){
//     echo 'Objeto não é do tipo esperado...' . PHP_EOL;
// }

// --------------------
// Métodos Mágicos - __get e __set
// --------------------

$pessoa = new PessoaFisica();

dump($pessoa->altura);

if(!property_exists($pessoa, 'altura')){
    $pessoa->altura = '';
}

$pessoa->altura = 20;

dump($pessoa->altura);