O padrão Singleton restringe a instanciação de uma classe e garante que apenas uma instância da classe exista na Máquina Virtual.

A classe singleton deve fornecer um ponto de acesso global para obter a instância da classe.

O padrão Singleton é usado para registro, objetos de drivers, cache e pool de threads.

O padrão de design Singleton também é usado em outros padrões de design como Abstract Factory, Builder, Prototype, Facade, etc.

O padrão de design Singleton também é usado em classes Java principais (por exemplo, java.lang.Runtime, java.awt.Desktop).

Para implementar um padrão singleton, temos diferentes abordagens, mas todas elas têm os seguintes conceitos comuns.

Construtor privado para restringir a instanciação da classe de outras classes.

Variável estática privada da mesma classe que é a única instância da classe.

Método estático público que retorna a instância da classe, este é o ponto de acesso global para o mundo externo obter a instância da classe singleton