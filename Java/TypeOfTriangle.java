package Java;

import java.util.Scanner;

public class TypeOfTriangle {
    public static void main(String[] args) {
        Scanner input21 = new Scanner(System.in);
        float sudut1, sudut2, sudut3,totalSudut;

        System.out.print("Masukkan sudut 1: ");
        sudut1 = input21.nextFloat();
        System.out.print("Masukkan sudut 2: ");
        sudut2 = input21.nextFloat();
        System.out.print("Masukkan sudut 3: ");
        sudut3 = input21.nextFloat();
        totalSudut = sudut1 + sudut2 + sudut3;

        if(totalSudut == 180){
            if((sudut1 == 90 ) || (sudut2 == 90) || (sudut3 == 90)){
                System.out.println("Segitiga tersebut adalahSegitiga siku-siku");
            }else if((sudut1 == sudut2) && (sudut2 == sudut3)){
                System.out.println("Segitiga tersebut adalah Segitiga sama sisi");
            }else if((sudut1 == sudut2) || (sudut2 == sudut3) || (sudut1 == sudut3)){
                System.out.println("Segitiga tersebut adalah Segitiga sama kaki");
            }else 
            System.out.println("Segitiga tersebut adalah segitiga sembarang");
        }else{
            System.out.println("BUKAN SEGITIGA!!!!!");
        }
    }
    
}
