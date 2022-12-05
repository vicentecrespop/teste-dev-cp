$(document).ready(function() {
    pegarCadastrados()
    
    $('#cep')[0].addEventListener('change', function(e) {
        preencherDadosCep(e.target.value)
    })
})

const preencherDadosCep = (cep) => {
    const viacep = `https://viacep.com.br/ws/${cep}/json/`
    fetch(viacep)   
        .then(res => res.json())
        .then(data => {
            if(!data.erro) {
                $('#cidade')[0].value = data.localidade
                $('#estado')[0].value = data.uf
                $('#logradouro')[0].value = data.logradouro
                $('#bairro')[0].value = data.bairro
            } else {
                window.alert('Erro! CEP não encontrado.')
            }
        })
        .catch(e => console.log(e))
}


const pegarCadastrados = () => {
    fetch('./src/config/read.php')
        .then(res => res.json())
        .then(data => gerarTabelaCadastrados(data))
        .catch(e => console.log(e))
}

const adicionarCadastrado = async (e) => {
    e.preventDefault()
    const id = $('#id')[0].value
    if(!id) {
        return console.log('Não é edição!')
    }
    return console.log('Erro')
    const nome = $('#nome')[0].value
    const sobrenome = $('#sobrenome')[0].value
    const cep = $('#cep')[0].value
    const cidade = $('#cidade')[0].value
    const estado = $('#estado')[0].value
    const logradouro = $('#logradouro')[0].value
    const numero = $('#numero')[0].value
    const bairro = $('#bairro')[0].value
    const complemento = $('#complemento')[0].value
    if(!nome || !sobrenome || !cep || !cidade || !estado || !logradouro || !numero || !bairro) {
        return window.alert('Preencha todos os campos!')
    } 

    const data = {nome, sobrenome, cep, cidade, estado, logradouro, numero, bairro, complemento}
    fetch('./src/config/create.php', {
        method: 'POST',
        headers: {
            'Content-type': 'application/json'
        },
        body: JSON.stringify(data)
    })
    .then(res => res.json())
    .then(data => console.log(data))
    .catch(e => console.log(e))

    console.log(data)
}

const editarCadastrado = (e) => {

    fetch('.src/config/update.php', {
        method: 'POST',
        headers: {
            'Content-type': 'application/json'
        },
        body: 
    })
}

const excluirCadastrado = (id) => {
    fetch(`./src/config/delete.php?id=${id}`)
    .then(res => res.json())
    .then(data => {
        console.log(data)
        pegarCadastrados()
    })
    .catch(e => console.log(e))
}

const mostrarCadastrados = () => {
    const cadastro = $('#formulario')
    const cadastrados = $('#cadastrados')
    cadastro.addClass('hide')
    cadastrados.removeClass('hide')
    pegarCadastrados()
}

const mostrarFormulario = () => {
    const cadastro = $('#formulario')
    const cadastrados = $('#cadastrados')
    cadastro.removeClass('hide')
    cadastrados.addClass('hide')
}

const gerarTabelaCadastrados = (data) => {
    const tbody = $('#dados_cadastrados')[0]
    const thead = $('#head_cadastrados')[0]
    gerarTableBody(data, tbody)
    gerarTableHead(data, thead)
}

const gerarTableHead = (data, thead) => {
    const tableRow = document.createElement('tr')
    const headers = Object.keys(data[0]).slice(10)
    headers.map(header => {
        const tableHeader = document.createElement('th')
        tableHeader.innerHTML = header.toUpperCase()
        tableRow.appendChild(tableHeader)
    })
    tableRow.innerHTML += '<th>Ação</th>'
    tableRow.innerHTML += '<th>Editar</th>'
    thead.innerHTML = tableRow.innerHTML
    console.log(tableRow.innerHTML)
}

const gerarTableBody = (data, tbody) => {
    const tdata = document.createElement('tbody')
    data.map(usuario => {
        const tableRow = document.createElement('tr')
        const dadosUsuario = Object.values(usuario).slice(0, 10)
        dadosUsuario.map(data => {
            const tableData = document.createElement('td')
            tableData.innerHTML = data
            tableRow.appendChild(tableData)
        })
        tableRow.innerHTML += `<td><button onclick='excluirCadastrado(${usuario.id})'>X</button></td>`
        tableRow.innerHTML += `<td><button onclick='editarCadastrado(${usuario.id})'>Editar</button></td>`
        tdata.appendChild(tableRow)
    })
    tbody.innerHTML = tdata.innerHTML
    console.log(tdata.innerHTML)
}


