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


const pegarCadastrados = (id = false) => {
    const url = id ? `./src/config/read.php?id=${id}` : './src/config/read.php'
    fetch(url)
        .then(res => res.json())
        .then(data => {
            if(id) mostrarFormulario(data)
            else gerarTabelaCadastrados(data)
        })
        .catch(e => console.log(e))
}

const adicionarCadastrado = async (e) => {
    e.preventDefault()

    const id = $('#id')[0].value
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

    const data = {id, nome, sobrenome, cep, cidade, estado, logradouro, numero, bairro, complemento}
    if(!id) {
        await fetch('./src/config/create.php', {
            method: 'POST',
            headers: {
                'Content-type': 'application/json'
            },
            body: JSON.stringify(data)
        })
        .then(res => res.json())
        .then(data => console.log(data))
        .catch(e => console.log(e))
    } else {
        await fetch('./src/config/update.php', {
            method: 'POST',
            headers: {
                'Content-type': 'application/json',
            },
            body: JSON.stringify(data)
        })
        .then(res => res.json())
        .then(data => console.log(data))
        .catch(e => console.log(e))
    }

    mostrarCadastrados()

}

const editarCadastrado = (usuario) => {
    $('input').removeClass('valid invalid')
    $('#id')[0].value = usuario[0].id
    $('#nome')[0].value = usuario[0].nome
    $('#sobrenome')[0].value = usuario[0].sobrenome
    $('#cep')[0].value = usuario[0].cep
    $('#cidade')[0].value = usuario[0].cidade
    $('#estado')[0].value = usuario[0].estado
    $('#logradouro')[0].value = usuario[0].rua
    $('#numero')[0].value = usuario[0].numero
    $('#bairro')[0].value = usuario[0].bairro
    $('#complemento')[0].value = usuario[0].complemento
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

const novoUsuario = [{id: '', nome: '', sobrenome: '', cep: '', cidade: '', estado: '', rua: '', numero: '', bairro: '', complemento: ''}]

const mostrarFormulario = (usuario = novoUsuario) => {
    editarCadastrado(usuario)
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
        const tableHeader = $('<th></th>')
        if(header === 'cidade' || header === 'estado' || header === 'rua') {
            tableHeader.addClass('hide-on-med-and-down')
        }
        tableHeader.html(header.toUpperCase())
        tableHeader.appendTo(tableRow)
    })
    tableRow.innerHTML += '<th>Ação</th>'
    tableRow.innerHTML += '<th>Editar</th>'
    thead.innerHTML = tableRow.innerHTML
}

const gerarTableBody = (data, tbody) => {
    const tdata = document.createElement('tbody')
    data.map(usuario => {
        const tableRow = document.createElement('tr')
        const dadosUsuario = Object.values(usuario).slice(0, 10)
        dadosUsuario.map(data => {
            const tableData = $('<td></td>')
            if(data === usuario.cidade || data === usuario.estado || data === usuario.rua) {
                tableData.addClass('hide-on-med-and-down')
            }
            tableData.html(data)
            tableData.appendTo(tableRow)
        })
        tableRow.innerHTML += `<td><div onclick='pegarCadastrados(${usuario.id})' class="blue-text"><i class="material-icons">mode_edit</i></div></td>`
        tableRow.innerHTML += `<td><div onclick='excluirCadastrado(${usuario.id})' class="red-text"><i class="material-icons">delete</i></div></td>`
        tdata.appendChild(tableRow)
    })
    tbody.innerHTML = tdata.innerHTML
}


