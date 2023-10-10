package Java;

public class XorOperation {
    public static void main(String[] args) {
        int x = 10;
        System.out.println("X++ = " + x++);
        System.out.println("Setelah Evaluasi = " + x);

        x =10;
        System.out.println("++X = " + ++x);
        System.out.println("Setelah Evaluasi = " + x);

        int y =12;
        System.out.println(x > y || y == x && y<=x);
        
        System.out.println(x);
        int z= x ^ y;
        System.out.println("Hasil Dari x ^ y = " + z);
        // merubah integer to binner
        String x1 = Integer.toBinaryString(x);
        String y1 = Integer.toBinaryString(y);
        String z1 = Integer.toBinaryString(z);
        System.out.println(String.format("Angka %s, diubah ke biner = %s", x, x1 ));
        System.out.println(String.format("Angka %s, diubah ke biner = %s", y, y1 ));
        System.out.println(String.format("Angka %s, diubah ke biner = %s", z, z1 ));
        z %= 2;
        System.out.println("Hasil Akhir z %= 2 = " + z);
        double amount = 2000;    
        System.out.println(String.format("%,.2f", amount));

    }
    
}
