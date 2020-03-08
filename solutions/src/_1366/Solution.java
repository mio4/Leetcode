package _1366;

public class Solution {
    public static String rankTeams(String[] votes) {
        if(votes.length == 1) //deal with edge case
            return votes[0];
        int len = votes[0].length();
        int[] scores = new int[26];
        int[] teams  = new int[26];
        //1. sum
        for(int i=0; i < votes.length; i++){
            for(int j=0; j < len; j++){
                scores[votes[i].charAt(j)-'A'] += (j+1);
            }
        }
        for(int i=0; i < 26; i++){
            teams[i] = i;
        }
        //2. bubble sort
        for(int i=26; i >= 0; i--){
            for(int j=0; j < 26-i-1;j++){
                if(scores[j] > scores[j+1] || (scores[j] == scores[j+1] && teams[j] > teams[j+1])){
                    int t = scores[j];
                    scores[j] = scores[j+1];
                    scores[j+1] = t;
                    t = teams[j];
                    teams[j] = teams[j+1];
                    teams[j+1] = t;
                }
            }
        }

        //3. return result;
        String s = "";
        for(int i=0; i < 26; i++){
            if(scores[i] > 0)
                s += (char)('A' + teams[i]);
        }
        return s;
    }

    public static void main(String[] args) {
        String[] s =  {"FVSHJIEMNGYPTQOURLWCZKAX","AITFQORCEHPVJMXGKSLNZWUY","OTERVXFZUMHNIYSCQAWGPKJL","VMSERIJYLZNWCPQTOKFUHAXG","VNHOZWKQCEFYPSGLAMXJIUTR","ANPHQIJMXCWOSKTYGULFVERZ","RFYUXJEWCKQOMGATHZVILNSP","SCPYUMQJTVEXKRNLIOWGHAFZ","VIKTSJCEYQGLOMPZWAHFXURN","SVJICLXKHQZTFWNPYRGMEUAO","JRCTHYKIGSXPOZLUQAVNEWFM","NGMSWJITREHFZVQCUKXYAPOL","WUXJOQKGNSYLHEZAFIPMRCVT","PKYQIOLXFCRGHZNAMJVUTWES","FERSGNMJVZXWAYLIKCPUQHTO","HPLRIUQMTSGYJVAXWNOCZEKF","JUVWPTEGCOFYSKXNRMHQALIZ","MWPIAZCNSLEYRTHFKQXUOVGJ","EZXLUNFVCMORSIWKTYHJAQPG","HRQNLTKJFIEGMCSXAZPYOVUW","LOHXVYGWRIJMCPSQENUAKTZF","XKUTWPRGHOAQFLVYMJSNEIZC","WTCRQMVKPHOSLGAXZUEFYNJI"};
        System.out.println(rankTeams(s));
    }
}