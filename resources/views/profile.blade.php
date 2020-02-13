<?php

//クラス作成
public class Card{
    
    //トランプのマークと数値
    public string Mark {get; set;}
    public int Nomber {get; set;}
    
    //トランプの表示
    public string NomberString{
        get{
            //１のトランプの数値を使用して判定
            switch (Nomber){
                //ここで条件分岐１と１１～１３の場合A、J、Q、Kを返す
            }
            return Nomber.ToString();
            
        }
    }
    
    //③ブラックジャックの点数
    public int Point{
        get{
            //①のトランプの数値を使用して判定
            switch(Nomber){
                //ここで条件分岐11,12,13を10として返す
            }
            return Nomber;
        }
    }
    
}