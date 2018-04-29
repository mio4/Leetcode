class Solution {
    public boolean isToeplitzMatrix(int[][] matrix) {
        int m = matrix.length; //行数
        int n = matrix[0].length; //列数
        int i,j;
        for(i=0; i < m-1;i++){
            for(j=0; j < n-1;j++){
                if(matrix[i][j] != matrix[i+1][j+1])
                    return false;
            }
        }
        return true;
    }
}