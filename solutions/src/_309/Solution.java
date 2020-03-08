package _309;

/**
 * 买卖股票
 * buy[i] : 最后一个操作是买入操作，第i天的最大利润
 * sell[i] : 最后一个操作是卖出操作，第i天的最大利润
 *
 * tricks: -prices[i]也可以表示利润
 */
class Solution {
    public int maxProfit(int[] prices) {
        if(prices == null || prices.length <= 1) //deal with edge cases
            return 0;

        int len = prices.length;
        int[] b = new int[len+1];
        int[] s = new int[len+1];
        b[0] = -prices[0]; //initialize special index
        s[0] = 0;
        b[1] = Math.max(b[0],-prices[1]);
        s[1] = Math.max(s[0],b[0]+prices[1]);
        for(int i=2; i < len; i++){
            b[i] = Math.max(b[i-1],s[i-2]-prices[i]);
            s[i] = Math.max(s[i-1],b[i-1]+prices[i]);
        }

        return s[len-1];
    }
}
