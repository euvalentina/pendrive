//
//  Pessoa.h
//  Exemplo_objC
//
//  Created by Usuário Convidado on 03/04/17.
//  Copyright © 2017 Usuário Convidado. All rights reserved.
//

#import <Foundation/Foundation.h>

@interface Pessoa : NSObject

@property(nonatomic, retain) NSString *nome;
@property(nonatomic) float peso;
@property(nonatomic) float altura;
@property(nonatomic) float imc;

//exemplo sem parametro do tipo void
-(void) calcularIMC;

//um exemplo sem parametro que retorna float
-(float) calcularIMC_2;

@end
