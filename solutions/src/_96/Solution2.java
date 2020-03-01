package _96;

import java.util.Arrays;

public class Solution2 {
    //dp[i] means if we use n nodes,we get dp[i] kind of tree structure.
    public int dp[];
    public int numTrees(int n) {
        if(n <= 1)
            return 1;
        dp = new int[n+1];
        dp[0] = 1;
        dp[1] = 1;
        dp[2] = 2;
        for(int i=3; i <= n; i++){
            int t = 0;
            for(int j=0; j < i; j++)
                t += dp[j]*dp[i-j-1];
            dp[i] = t;
        }
        return dp[n];
    }
}
