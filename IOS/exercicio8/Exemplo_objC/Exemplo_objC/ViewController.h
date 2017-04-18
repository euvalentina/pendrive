//
//  ViewController.h
//  Exemplo_objC
//
//  Created by Usuário Convidado on 03/04/17.
//  Copyright © 2017 Usuário Convidado. All rights reserved.
//

#import <UIKit/UIKit.h>

@interface ViewController : UIViewController

@property(weak, nonatomic) IBOutlet UITextField *txtNome;
@property(weak, nonatomic) IBOutlet UITextField *txtPeso;
@property(weak, nonatomic) IBOutlet UITextField *txtAltura;
@property(weak, nonatomic) IBOutlet UITextField *txtImc;

- (IBAction)calcular:(id)sender;



@end

