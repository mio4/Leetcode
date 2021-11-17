```java
class Solution {
    public int[][] matrixReshape(int[][] nums, int r, int c) {
        int m = nums.length;
        int n = nums[0].length;
        //1. 不能reshape的情况
        if(m*n != r*c){
            return nums;
        }

        //2. reshape
        int index;
        int[][] result = new int[r][c];
        for(int i=0; i < m; i++){
            for(int j=0; j < n; j++){
                //1*n 2*n 3*n ... m*n
                index = i*n+j;
                result[index/c][index%c] = nums[i][j];
            }
        }
        return result;
    }
}
```

1、需要建立原始矩阵和目标矩阵之间的坐标映射关系

2、映射的过程的矩阵的高没有对应关系，和矩阵的宽有对应关系：`index = i*n + j `和 `index%r` `index/r`













































