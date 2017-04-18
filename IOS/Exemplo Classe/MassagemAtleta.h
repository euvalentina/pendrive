//
//  MassagemAtleta.h
//  Exemplo Classe
//
//  Created by Usuário Convidado on 27/03/17.
//  Copyright © 2017 Agesandro Scarpioni. All rights reserved.
//

#import <Foundation/Foundation.h>
#import  "atleta.h"
@interface MassagemAtleta : NSObject

@property(nonatomic,retain)Atleta *atleta;
-(void)massagear;



@end
