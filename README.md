## Service Container & Service Provider
- Conceito de Service Container e Service Provider;
- Conceito do método 'bind' e do método 'make';
- Conceito do método 'register' e do método 'boot';
- Veja na documentação do Laravel o conceito de 'Contextual Binding';

- O Laravel possui a resolução automática de dependências com o Service Container, disparando erro somente quando existe uma classe na qual ele não consegue resolver automaticamente.

- Usamos o método bind para definir a "receita" de como a instância deve ser feita.

- Usamos o método make para obter uma instância do container.

- Podemos criar services providers dentro de nossas aplicações para fazer os registros e configurações necessárias.

- O Laravel possui uma série de services providers dentro de seus componentes. (Olhar em especial o Validation)

- Os services providers fazem parte do processo de bootstrap de uma aplicação Laravel.

- Usamos o método register
para registrar informações dentro do container já na inicialização do Laravel.

- Usamos o método boot
para definir configurações da nossa aplicação, ele é executado depois que todos os métodos register
de todos services providers são executados.

- Usamos o método singleton quando queremos que sempre seja retornada a mesma instância sempre que precisarmos.

Usamos o método bind quando queremos que sempre seja retornada a mesma instância sempre que precisarmos.