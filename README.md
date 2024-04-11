# NoSleep
Loja de roupa virtual

CRUD LOGIN:

CREATE = create   -> exibe o formulario para criar um registro de cliente
READ   = show/:id -> exibe um registro por id
UPDATE = edit/:id -> exibe o formulario para editar o cliente

posts, services, actions:

UPDATE = update/:id -> atualiza o cliente
DELETE = delete/:id -> deleta a conta
CREATE = save       -> cria o cliente

banco: client
colunas:
id           (altoincrement)
name         (varchar150)
dt_birth     (date)
cpf_cnpj     (varchar20)
rg_ie        (varchar20)
telefone     (varchar20)
email        (varchar50)
cep          (varchar20)
road         (varchar100)
neighborhood (varchar100)
city         (varchar100)
state        (varchar10)
complement   (varchar200)
number       (int)
dt_created_at(date)
dt_updated_at(date)

CRUD STOCK:

INDEX  = index    -> exibe todos os registros de produtos
CREATE = create   -> exibe o formulario para criar um registro de produto
READ   = show/:id -> exibe um registro por id
UPDATE = edit/:id -> exibe o formulario para editar um registro

posts, services, actions:

UPDATE = update/:id -> atualiza um registro
DELETE = delete/:id -> remove um registro
CREATE = save       -> cria um registro
GET    = get        -> pega o id de um registro
LIST   = list       -> lista os registros para trazer todas as informações

banco: stock
colunas:
id           (altoincrement)
part_code    (int)
sector       (varchar50)
type         (varchar50)
subtype      (varchar50)
material     (varchar50)
line         (varchar50)
color        (varchar50)
details      (varchar50)
tamanho      (varchar10)
funcionario  (varchar150)
dt_register  (date)
valor        (float)
dt_created_at(date)
dt_updated_at(date)

CRUD EMPLOYEE:

INDEX  = index    -> exibe todos os registros dos funcionarios
CREATE = create   -> exibe o formulario para criar um registro de funcionario
READ   = show/:id -> exibe um funcionario por id
UPDATE = edit/:id -> exibe o formulario para editar um funcionario
GET    = get      -> pega o id de um funcionario
LIST   = list     -> lista os registros para trazer todos os funcionarios

posts, services, actions:

UPDATE = update/:id -> atualiza um funcionario
DELETE = delete/:id -> remove um funcionario
CREATE = save       -> cria um funcionario
GET    = get        -> pega o id de um funcionario
LIST   = list       -> lista os registros para trazer todos os funcionarios

banco: client
colunas:
id           (altoincrement)
name         (varchar150)
dt_birth     (date)
cpf_cnpj     (varchar20)
rg_ie        (varchar20)
telefone     (varchar20)
email        (varchar50)
cep          (varchar20)
road         (varchar100)
neighborhood (varchar100)
city         (varchar100)
state        (varchar10)
complement   (varchar200)
number       (int)
dt_created_at(date)
dt_updated_at(date)

CRUD CART:

INDEX  = index    -> exibe a peça selecionada
CREATE = create   -> cria um item no carrinho
READ   = show/:id -> exibe um item do carrinho da pessoa
UPDATE = edit/:id -> atualiza o carrinho da pessoa
GET    = get      -> pega o id do item no carrinho
LIST   = list     -> mostra todos os itens do carrinho da pessoa

posts, services, actions:

UPDATE = update/:id -> atualiza um item do carrinho
DELETE = delete/:id -> deleta um item do carrinho
CREATE = save       -> cria um item no carrinho 
GET    = get        -> pega o id de um item do carrinho
LIST   = list       -> mostra todos os itens do carrinho

banco: cart
colunas:
id           (altoincrement)
id_part      (int)              -> stock
id_client    (int)              -> client
qntd_part    (int)
size         (varchar(10))
dt_created_at(date)
dt_updated_at(date)