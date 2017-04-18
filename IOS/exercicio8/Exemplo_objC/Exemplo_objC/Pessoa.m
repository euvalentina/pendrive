//
//  Pessoa.m
//  Exemplo_objC
//
//  Created by Usuário Convidado on 03/04/17.
//  Copyright © 2017 Usuário Convidado. All rights reserved.
//

#import "Pessoa.h"

@implementation Pessoa

-(float) calcularIMC_2{
    return self.peso/ (self.altura*self.altura);
    
    //exemplo
    //return _peso/(_altura*_altura);
}

-(void) calcularIMC{
    //uma forma apenas
    self.imc = self.peso/ pow(self.altura,2);
}

@end
