const {Schema, model} = require('mongoose')

const ProdutoSchema = new Schema({
    nome: {
        type: String
    }
})

const modelo = model("Produto", ProdutoSchema)

module.exports = modelo