package test;

public class t1 {

    public static void main(String[] args) {
        int n = 1;
        test(--n);
        System.out.println("in main n = " + n);
    }

    public static void test(int n){
        System.out.println("in function n = " + n);
    }
}

