package br.com.fiap.a2tina_android_recyclerview;

import android.content.Context;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.BaseAdapter;
import android.widget.ImageView;
import android.widget.TextView;

import java.util.List;

/**
 * Created by logonrm on 23/03/2017.
 */

public class ContatosAdapter extends BaseAdapter {
    Context context;
    List<Contato> contatos;

    public ContatosAdapter(Context context, List<Contato> contatos){
        this.context = context;
        this.contatos = contatos;
    }

    @Override
    public int getCount() {
        return this.contatos.size();
    }

    @Override
    public Object getItem(int i) {
        return this.contatos.get(i);
    }

    @Override
    public long getItemId(int i) {
        return i;
    }

    @Override
    public View getView(int i, View view, ViewGroup viewGroup) {
        LayoutInflater layoutInflater = LayoutInflater.from(this.context);

        Contato contato = this.contatos.get(i);

        View v = layoutInflater.inflate(R.layout.activity_listview_contato, null);
        ImageView imgContato = (ImageView) v.findViewById(R.id.imgContato);
        TextView txtNomecontato = (TextView) v.findViewById(R.id.txtNomeContato);
        TextView txtTelefoneContato = (TextView) v.findViewById(R.id.txtTelefoneContato);

        imgContato.setImageResource(contato.getImagem());
        txtNomecontato.setText(contato.getNome());
        txtTelefoneContato.setText(contato.getTelefone());

        return v;
    }
}
