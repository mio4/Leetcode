package _32;

import java.util.Stack;

/**
 * 1. stack存储的是上一个有效括号的下标
 * 2. 每次遇到()的时候计算index到上次有效符号之间的距离
 */
class Solution {
    public static int longestValidParentheses(String s) {
        Stack<Integer> stack = new Stack<>();
        stack.push(-1);
        int result = 0;
        for(int i=0; i < s.length();i++){
            if(s.charAt(i) == ')' && stack.size() > 1 && s.charAt(stack.peek()) == '('){
                stack.pop();
                result = Math.max(result,i-stack.peek());
            }else{
                stack.push(i);
            }
        }
        return result;
    }

    public static void main(String[] args) {
        System.out.println(longestValidParentheses("()(()"));
    }
}