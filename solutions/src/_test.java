public class _test {
    public static void main(String[] args) {
        int[] bank = new int[10];
        bank[0] = 1;
        if(--bank[0] > 0)
            System.out.println("-");
        System.out.println(bank[0]);
    }
}
