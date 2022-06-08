"""Faça um programa que verifique o sexo de uma pessoa. O usuário deve informar
 ‘F’ ou ‘M’ e o programa deve escrever “Feminino” ou “Masculino”, conforme a letra digitada."""
"""
sexo = str(input("Digite seu sexo: F-Feminino M-Masculino: "))
if(sexo == 'M' or sexo == 'm'):
    print("Sexo masculino!")
elif(sexo == 'F' or sexo == 'f'):
    print("Sexo Feminino!")
else:
    print("Sexo invalido")
"""
"""Faça um programa que peça a idade do usuário. Se ele for maior de idade, peça para ele digitar o
 nome dele e informe a mensagem “Bem vindo Fulano”. Caso contrário, apresente “Entrada não permitida”."""

idade = int(input("Digite a idade: "))
maior = 18 

if (idade > maior):
    nome = str(input("Seu nome: "))
    print("Prazer {} você é maior de idade!".format(nome))
elif(idade < maior or idade == 0):
    print("Entrada não permitida")
else:
    print("Idade Invalida")    
-