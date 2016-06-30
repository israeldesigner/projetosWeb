var app = angular.module("listaTelefonica",["ngMessages"]);

var contatoPet = {
  nome: "Israel",
  telefone: "99472444",
}

var data = new Date();

app.controller("listaCont", function($scope) {
    $scope.message = "Lista de Contatos";
    $scope.contatoAmigos = [
      {nome:"pedro", telefone:"8598700021",data,operadora:{nome:"oi", codigo:"31", categoria:"celular"}, cor:"blue"},
      {nome:"ana", telefone:"8598705321",data,operadora:{nome:"embratel", codigo:"21", categoria:"fixo"}, cor:"yellow"},
      {nome:"junior", telefone:"8598704521",data,operadora:{nome:"tim", codigo:"41", categoria:"celular"}, cor:"red"}
    ];
    $scope.operadoras = [
      {nome:"oi", codigo:"31", categoria:"celular"},
      {nome:"tim", codigo:"41", categoria:"celular"},
      {nome:"vivo", codigo:"15", categoria:"celular"},
      {nome:"net", codigo:"23", categoria:"fixo"},
      {nome:"embratel", codigo:"21", categoria:"fixo"}
    ];

    $scope.addContato = function (contato) {
      //$scope.contatoAmigos.push({nome:nome, telefone:telefone});
      $scope.contatoAmigos.push(angular.copy(contato));
      delete $scope.contato;
      $scope.contatoForm.$setPristine();
    }

    $scope.deletarContato = function(contatoAmigos) {
        var contSelecionados = contatoAmigos.filter(function (elem) {
          if (!elem.selecionado)  return elem;
        })
        $scope.contatoAmigos = contSelecionados;
    }

    $scope.temContatoSelecionado = function (contatoAmigos) {
        return contatoAmigos.some(function(elem) {
           return elem.selecionado;
        })
    }

    $scope.ordenarPor = function(campo) {
      $scope.criterioDeOrdenacao = campo;
      $scope.direcaoDaOrdenacao = !scope.direcaoDaOrdenacao;
    }

    this.lista = contatoPet;

    $scope.selecao = "selecionado";
    $scope.densa = "negrito";
    $scope.caixa = "caixa";
    $scope.rodape = "rodape";
})
