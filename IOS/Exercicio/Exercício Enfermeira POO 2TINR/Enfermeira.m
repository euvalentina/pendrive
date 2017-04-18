//
//  Enfermeira.m
//  Exercício Enfermeira POO 2TINR
//
//  Created by Usuário Convidado on 20/03/17.
//  Copyright © 2017 Agesandro Scarpioni. All rights reserved.
//

#import "Enfermeira.h"

@implementation Enfermeira

-(void)setNome:(NSString *)_nome{
    nome=_nome;
}
-(NSString *)getNome{
    return nome;
}
-(void)setCoren:(int)_coren{
    coren=_coren;
}
-(int)getCoren{
    return coren;
}
-(void)setSalario:(float)_salario{
    salario=_salario;
}
-(float)getSalario{
    return salario;
}
-(void)setPlantao:(BOOL)_plantao{
    plantao=_plantao;
}
-(BOOL)getPlantao{
    return plantao;
}

-(Enfermeira *)initWithNome:(NSString *)_nome
                   andCoren:(int)_coren
                 andPlantao:(BOOL)_plantao
                 andSalario:(float)_salario{
    
    self = [super init];
    if(self){//testa se a inicialização foi ok
        [self setCoren:_coren];
        [self setSalario:_salario];
        [self setPlantao:_plantao];
        [self setNome:_nome];
    }
    return self;
}

-(NSString *)medicarComNomeRemedio:(NSString *) remedio
                   eQtdComprimidos:(int) qtd{
    return [NSString stringWithFormat:@"%d comprimidos de %@",qtd,remedio];
                                       
}

-(float)calcularQtdSoroComMililitros:(float) ml
                    efrequenciaAoDia:(int) qtd{
    return qtd * ml;
}

@end
