package Java;

import java.util.Scanner;

/**
 * KabisatChecker
 */
public class KabisatChecker {

    public static void main(String[] args) {
        Scanner input21 = new Scanner(System.in);
        System.out.print("Masukkan tahun: ");
        int tahun = input21.nextInt();

        if ((tahun % 4) == 0) {
            if ((tahun % 100 ) !=0) {
                System.out.println(tahun + " Adalah tahun kabisat");
                }else if ((tahun % 400) == 0) {
                    System.out.println(tahun + " Adalah tahun kabisat");
            } else{
                System.out.println(tahun + " Bukan tahun kabisat");
            }
        } else
            System.out.println(tahun + " bukan tahun kabisat");
    }
}