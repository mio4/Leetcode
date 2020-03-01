package _96;

class Solution {
    /**
     * FIXME recursion : repeat compute condition
     */
    public int numTrees(int n) {
        return counter(n);
    }

    public int counter(int n){
        //1. end recursion
        if(n == 0 || n == 1)
            return 1;
        if(n == 2)
            return 2;

        //2. normal condition
        int res = 0;
        int sum = n-1;
        for(int i=0; i <= sum;i++)
            res += counter(i)*counter(sum-i);
        return res;
    }
}
