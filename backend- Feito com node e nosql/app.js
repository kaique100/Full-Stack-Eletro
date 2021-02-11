const app = require('./src/config/server')
const connection = require('./src/config/connection')
const Produto = require('./src/models/Produtos')

app.get("/", async (req,res)=>{
    const resultado = await Produto.find()

    res.json(resultado)
})