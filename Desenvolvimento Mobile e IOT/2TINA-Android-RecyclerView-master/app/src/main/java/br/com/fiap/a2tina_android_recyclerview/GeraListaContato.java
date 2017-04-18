package br.com.fiap.a2tina_android_recyclerview;

import java.util.ArrayList;
import java.util.List;

/**
 * Created by logonrm on 23/03/2017.
 */

public class GeraListaContato {

    public static List<Contato> geraContato(){
        List<Contato> contatos = new ArrayList<>();

        Contato contato1 = new Contato("Maria José", "(11)1111-1111", "Hello! I,m in FIAP zap", R.drawable.male3 );
        Contato contato2 = new Contato("Valentina Rodrigues", "(11)2222-2222", "Hello! I,m in FIAP zap", R.drawable.female1);
        Contato contato3 = new Contato("Allan Ribeiro", "(11)3333-3333", "Hello! I,m in FIAP zap",R.drawable.female1);
        Contato contato4 = new Contato("Valentina denovo", "(11)1111-1111", "Hello! I,m in FIAP zap", R.drawable.matureman1);

        contatos.add(contato1);
        contatos.add(contato2);
        contatos.add(contato3);

        return contatos;
    }

}