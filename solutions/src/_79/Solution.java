package _79;

import java.util.Arrays;

public class Solution {
    /**
     * TLE
     * @param board
     * @param word
     * @return
     */
    public static boolean exist(char[][] board, String word) {
        int m = board.length;
        int n = board[0].length;

        for(int i=0; i < m; i++){
            for(int j=0; j < n; j++){
                int[][] mask = new int[m][n];
                if(search(board,m,n,i,j,word,mask))
                    return true;
            }
        }
        return false;
    }

    public static boolean search(char[][] board,int m, int n,int i, int j,String word,int[][] mask){
        //1. false
        if(board[i][j] != word.charAt(0) || mask[i][j] == 1)
            return false;

        //2. continue search
        if(board[i][j] == word.charAt(0) && mask[i][j] == 0){
            if(word.length() == 1)
                return true;

            mask[i][j] = 1;
            Boolean flag = false;
            if(i > 0)   flag |= search(board,m,n,i-1,j,word.substring(1), copyArray(mask));
            if(j < n-1) flag |= search(board,m,n,i,j+1,word.substring(1),copyArray(mask));
            if(i < m-1) flag |= search(board,m,n,i+1,j,word.substring(1),copyArray(mask));
            if(j > 0)   flag |= search(board,m,n,i,j-1,word.substring(1),copyArray(mask));

            return flag;
        }

        return true;
    }

    public static int[][] copyArray(int[][] nums){
        int m = nums.length;
        int n = nums[0].length;
        int[][] res = new int[m][n];
        for(int i=0; i < m; i++){
            for(int j=0; j < n; j++){
                res[i][j] = nums[i][j];
            }
        }
        return res;
    }

    public static void main(String[] args) {
        char[][] board = {{'C','A','A'},{'A','A','A'},{'B','C','D'}};
        System.out.println(exist(board,"AAB"));

        char[][] board2 = {{'A','B','C','E'},{'S','F','E','S'},{'A','D','E','E'}};
        System.out.println(exist(board2,"ABCEFSADEESE"));
    }
}