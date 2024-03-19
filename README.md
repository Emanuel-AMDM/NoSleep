# NoSleep
Loja de roupa virtual

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
id(altoincrement)
part_code(int)
sector(varchar50)
type(varchar50)
subtype(varchar50)
material(varchar50)
line(varchar50)
color(varchar50)
details(varchar50)
tamanho(varchar10)
funcionario(varchar150)
dt_register(date(currenttimestemp))
valor(float)
dt_created_at(date(currenttimestamp))
dt_updated_at(date(currenttimestamp))

CRUD EMPLOYEE:

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

banco: employee
colunas:
id(altoincrement)
name(varchar(150))
dt_birth(date)
cpf_cnpj(int)
rg_ie(int)
telefone(int)
email(varchar50)
cep(int)
road(varchar100)
neighborhood(varchar100)
city(varchar100)
state(varchar10)
complement(varchar200)
number(int)
dt_created_at(date(currenttimestamp))
dt_updated_at(date(currenttimestamp))