## brute force

```java
class Solution {
    public boolean searchMatrix(int[][] matrix, int target) {
        for(int i=0; i < matrix.length; i++){
            for(int j=0; j < matrix[0].length; j++){
                if(matrix[i][j] == target){
                    return true;
                }
            }
        }
        return false;
    }
}
```









## Brilliant search

```java
class Solution {
    public boolean searchMatrix(int[][] matrix, int target) {
        int i = 0, j = matrix[0].length-1;
        while(i < matrix.length && j >= 0){
            if(matrix[i][j] < target){
                i++;
            } else if(matrix[i][j] == target){
                return true;
            } else {
                j--;
            }
        }
        return false;
    }
}
```

![image-20210104204523941](image-20210104204523941.png)



① 路径查找，排除不可能存在的路径





































