package com.example.tanuj.vcare;

import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.TextView;
import android.widget.Toast;

public class InventoryDetails extends AppCompatActivity {

    TextView textViewRemainingKits;
    Button buttonUpdateInventory;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_inventory_details);

        textViewRemainingKits=(TextView)findViewById(R.id.textViewRemainingKits);
        buttonUpdateInventory=(Button)findViewById(R.id.buttonUpdateInventory);

        buttonUpdateInventory.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {

            }
        });

    }
}
