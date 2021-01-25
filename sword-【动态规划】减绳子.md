```java
class Solution {
    public int cuttingRope(int n) {
        int[] dp = new int[n+1];
        dp[2] = 1;
        for(int i=3; i <= n; i++){
            for(int j=2; j <= i; j++){
                dp[i] = Math.max(dp[i],dp[j]*(i-j));
                dp[i] = Math.max(dp[i],(j)*(i-j));
            }
        }
        return dp[n];
    }
}
```

1、绳子可以分为2段：j和i-j的部分

2、绳子可以分为多段：枚举（j，i-j）之间的所有可能

















































































