//
//  Enfermeira.h
//  Exercício Enfermeira POO 2TINR
//
//  Created by Usuário Convidado on 20/03/17.
//  Copyright © 2017 Agesandro Scarpioni. All rights reserved.
//

#import <Foundation/Foundation.h>

@interface Enfermeira : NSObject{
    NSString *nome;
    int coren;
    float salario;
    BOOL plantao;
}
-(void)setNome:(NSString *)_nome;
-(NSString *)getNome;
-(void)setCoren:(int)_coren;
-(int)getCoren;
-(void)setSalario:(float)_salario;
-(float)getSalario;
-(void)setPlantao:(BOOL)_plantao;
-(BOOL)getPlantao;

-(Enfermeira *)initWithNome:(NSString *)_nome
                     andCoren:(int)_coren
                   andPlantao:(BOOL)_plantao
                 andSalario:(float)_salario;


-(NSString *)medicarComNomeRemedio:(NSString *) remedio
                   eQtdComprimidos:(int) qtd;

-(float)calcularQtdSoroComMililitros:(float) ml
                    efrequenciaAoDia:(int) qtd;



@end
