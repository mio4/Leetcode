```java
class Solution {
    public int cuttingRope(int n) {
        if(n == 2){
            return 1;
        } else if(n == 3){
            return 2;
        } else if(n == 4){
            return 4;
        }
        int mod = 1_000_000_007;
        long res = 1;
        while(n > 4){
            res = (res*3)%mod;
            n -= 3;
        }
        res = (res*n)%mod;
        return (int)(res%mod);
    }
}
```

1、纯数学题

2、如果分为两段，等分效果最好；猜测分为n段，等分效果也最好

3、证明：

```
n = ax
y = x^a = x^(n/x) = (x ^ (1/x))^n
求解：y1 = (x ^ (1/x))的最大值
取对数 ：lny1 = 1/x * lnx
对x求导：1/y1 * y1' = 1-lnx/x^2

所以1-lnx = 0最大，即x = e，取最接近的2和3
```











































































