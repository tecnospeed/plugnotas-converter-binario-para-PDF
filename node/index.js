const axios = require('axios')
const fs = require('fs')

const idNota = '5ea1f1444c3ebafb7ecf5f39'
var config = {
  method: 'get',
  url: 'https://api.sandbox.plugnotas.com.br/nfe/' + `${idNota}` + '/pdf',
  headers: {
    'x-api-key': '2da392a6-79d2-4304-a8b7-959572c7e44d',
    'Content-type': 'applcation/pdf',
  },
  responseType: 'arraybuffer',
}

axios(config)
  .then(function (response) {
    fs.writeFile(`${idNota}` + '.pdf', response.data, err => {
      if (err) {
        console.log(err)
      }
      console.log('PDF Salvo com Sucesso !')
    })
  })
  .catch(function (error) {
    console.log(error)
  })
