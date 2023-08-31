package com.example.appbanhang;

import androidx.appcompat.app.AppCompatActivity;

import android.graphics.Color;
import android.os.Bundle;
import android.text.Editable;
import android.text.TextWatcher;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.TextView;
import android.widget.Toast;

public class MainActivity extends AppCompatActivity {
    public static final String emailPattern = "[a-zA-Z0-9._-]+@[a-zA-Z]+\\.+[a-z]{2,}";
    private EditText txtEmail;
    private EditText txtPassword;
    private Button btnLogin;
    private Boolean isValidEmail = false;
    private TextView txtValidate;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
        txtEmail = (EditText) findViewById(R.id.txtEmail);
        txtPassword = (EditText) findViewById(R.id.txtPassword);
        txtValidate = (TextView)findViewById(R.id.txtValidate);
        btnLogin = (Button) findViewById(R.id.btnLogin);
        btnLogin.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                String email = txtEmail.getText().toString().trim();
                Toast.makeText(getApplicationContext(),"You pressed email: "+email, Toast.LENGTH_LONG).show();

            }
        });
        txtEmail.addTextChangedListener(new TextWatcher() {
            @Override
            public void beforeTextChanged(CharSequence charSequence, int i, int i1, int i2) {

            }

            @Override
            public void onTextChanged(CharSequence charSequence, int i, int i1, int i2) {
                txtValidate.setText("");
                String email = txtEmail.getText().toString().trim();
                isValidEmail = (email.matches(emailPattern) && charSequence. length() > 0);
                if(!isValidEmail){
                    txtValidate.setTextColor(Color.rgb(255,0,0));
                    txtValidate.setText("Invalid email address");
                }

            }

            @Override
            public void afterTextChanged(Editable editable) {

            }
        });
    }
}