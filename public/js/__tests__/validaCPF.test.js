const validaCPF = require('./validaCPF')

test('Testando um cpf valido com 11 numeros de 0 a 9', () => {    
    expect(validaCPF('11868629635')).toBe(true)
})
test('Testando um cpf invalido com 11 numeros de 0 a 9', () => {    
    expect(validaCPF('12345678910')).toBe(false)
})
test('Testando um cpf invalido com caracteres no meio', () => {    
    expect(validaCPF('12a45678910')).toBe(false)
})
test('Testando um cpf valido com o primeiro resto = 1', () => {    
    expect(validaCPF('02160565601')).toBe(true)
})
test('Testando um cpf valido com ponto e traço', () => {    
    expect(validaCPF('118.686.296-35')).toBe(true)
})
test('Testando um cpf invalido nulo', () => {    
    expect(validaCPF('00000000000')).toBe(false)
})
test('Testando um cpf invalido com mais de 11 numeros', () => {    
    expect(validaCPF('1234567891011')).toBe(false)
})



// testes extras
//test('Testando um cpf valido da fabi', () => {    
//  expect(validaCPF('09817554619')).toBe(true)
//})
//test('Testando um cpf invalido com ponto e traço', () => {    
//    expect(validaCPF('123.456.789-10')).toBe(false)
//})
