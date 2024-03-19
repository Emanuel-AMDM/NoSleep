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
codigo_da_peca(int)
setor(varchar50)
tipo(varchar50)
subtipo(varchar50)
material(varchar50)
linha(varchar50)
cor(varchar50)
detalhes(varchar50)
tamanho(varchar10)
funcionario(varchar150)
dt_cadastro(date(currenttimestemp))
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
nome(int)
dt_nascimento(date)
cpf_cnpj(int)
rg_ie(int)
telefone(int)
email(varchar50)
cep(int)
rua(varchar100)
bairro(varchar100)
cidade(varchar100)
estado(varchar5)
complemento(varchar200)
numero(int)
dt_created_at(date(currenttimestamp))
dt_updated_at(date(currenttimestamp))


llll