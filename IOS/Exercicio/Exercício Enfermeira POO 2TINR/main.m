//
//  main.m
//  Exercício Enfermeira POO 2TINR
//
//  Created by Usuário Convidado on 20/03/17.
//  Copyright © 2017 Agesandro Scarpioni. All rights reserved.
//

#import <Foundation/Foundation.h>
#import "Enfermeira.h"

int main(int argc, const char * argv[]) {
    @autoreleasepool {
        Enfermeira *e = [[Enfermeira alloc]init];
        [e setNome:@"Carlos Rodrigues"];
        [e setSalario:5888];
        [e setPlantao:YES];
        [e setCoren:123456];
        //modelo com if ternário
        NSLog(@"Enfermeiro %@ - Coren %d", [e getNome], [e getCoren]);
        //modelo com if composto
        NSLog(@"Salário atual %0.2f - Plantonista %@", [e getSalario], [e getPlantao]? @"SIM":@"NÃO");
        
        if ([e getPlantao]) {
            NSLog(@"Plantonista: SIM");
        }else{
             NSLog(@"Plantonista: NÃO");
        }
        //criando um objeto usando nosso construtor
        Enfermeira *e2 = [[Enfermeira alloc]initWithNome:@"Mariana Cruz"
                                                andCoren:22255
                                              andPlantao:NO
                                              andSalario:8000];
        //modelo com if ternário
        NSLog(@"Enfermeiro %@ - Coren %d", [e2 getNome], [e2 getCoren]);
        //modelo com if composto
        NSLog(@"Salário atual %0.2f - Plantonista %@", [e2 getSalario], [e2 getPlantao]? @"SIM":@"NÃO");
        NSLog(@"%@",[e2 medicarComNomeRemedio:@"Omeprazol" eQtdComprimidos:2]);
        
        NSLog(@"A quantidade de soro por dia é %0.2f", [e2 calcularQtdSoroComMililitros:200
                                                                       efrequenciaAoDia:5]);
        
        
        }
    return 0;
}
