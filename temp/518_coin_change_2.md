5 [1,2,5]
5 = 5
5 = 2 + 2 + 1
5 = 2 + 1 + 1 + 1
5 = 1 + 1 + 1 + 1 + 1
return 4

amount = [0,5000]
coins.length = [1,300]
coins.value = [1,5000]





```java
    public static int change(int amount, int[] coins) {
        int dp[] = new int[amount+1];
        dp[0] = 1;
        for(int coin : coins){
            for(int i=coin; i<= amount; i++){
                dp[i] = dp[i] + dp[i-coin];
            }
        }
        return dp[amount];
    }
```





TODO：常见的背包问题有哪些？

需要整理出一个大纲，分类做题。。。

如何理解这些题之间的差异。。。

---

首先是定义数组：`dp[i][j]`表示用i个硬币凑出j元的方案个数。

`f(i)(j) = f(i-1)(j) + f(i)(j-x)`



行是面额，列是硬币数量

|      | 1    | 2    | 3    | 4    | 5    |
| ---- | ---- | ---- | ---- | ---- | ---- |
| 1    | 1    | 1    | 1    | 1    | 1    |
| 2    | 1    |      |      |      |      |
| 5    | 1    |      |      |      |      |

以硬币作为观察点，

如果有面值2元的硬币：

① 要凑出1元的金额，是不能使用这个硬币的，所以只能沿用之前的方案。

② 如果要凑出面值>=2元的面额，例如3元，可以用凑出1元的方案+一个2元的硬币构成。

所以这时候`dp[i][j] = dp[i-1][]`

```java
    public static int change(int amount, int[] coins) {
        int[][] dp = new int[coins.length+1][amount+1];
        dp[0][0] = 1;
        //从只使用1个硬币开始，只使用第一个硬币，看下能跑出来多少种情况
        //然后开始使用第2硬币....
        for(int row=1; row <= coins.length; row++){
            for(int col=0; col <= amount; col++){
                //col>=coins[row-1]表示当前金额应该>=上一个硬币的面值
                dp[row][col] = dp[row-1][col] + (col>=coins[row-1]?dp[row][col-coins[row-1]]:0);
            }
        }
        return dp[coins.length][amount];
    }
```

TODO：不是很理解这道题。。。。



---

感觉背包问题得出个专题，专门来看看。。。

---













































