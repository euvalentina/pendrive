//
//  main.m
//  Property
//
//  Created by Usuário Convidado on 20/03/17.
//  Copyright © 2017 Agesandro Scarpioni. All rights reserved.
//

#import <Foundation/Foundation.h>
#import "Carro.h"

int main(int argc, const char * argv[]) {
    @autoreleasepool {
        Carro *c = [[Carro alloc]init];
        [c setMarca:@"FIAT"];
        c.modelo = @"TORO";
        NSLog(@"Modelo: %@",[c modelo]);
        NSLog(@"Marca: %@",c.marca);
        
        
    }
    return 0;
}
