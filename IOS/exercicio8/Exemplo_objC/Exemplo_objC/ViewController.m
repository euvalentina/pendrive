//
//  ViewController.m
//  Exemplo_objC
//
//  Created by Usuário Convidado on 03/04/17.
//  Copyright © 2017 Usuário Convidado. All rights reserved.
//


#import "ViewController.h"
#import "Pessoa.h"

@interface ViewController ()

@end

@implementation ViewController

- (void)viewDidLoad {
    [super viewDidLoad];
    
}


- (void)didReceiveMemoryWarning {
    [super didReceiveMemoryWarning];
    
}

-(IBAction)calcular:(id)sender{
    Pessoa *p = [[Pessoa alloc]init];
    
    p.peso = self.txtPeso.text.floatValue;
    p.altura = self.txtAltura.text.floatValue;
    p.nome = self.txtNome.text;
    
    [p calcularIMC]; //void também
    self.txtImc.text = [NSString stringWithFormat:@"%f", p.imc];
    
}




@end
