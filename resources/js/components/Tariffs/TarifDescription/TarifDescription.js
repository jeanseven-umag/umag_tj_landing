import { Flex, Grid } from "@mantine/core";

export const TarifDescription = () => {
  return (
    <div className="bg-tariffs-description">
      <Flex direction="column" className="tariffs-description-block">
        <h3 className="tariffs-description-caption">
          Насбкунии ибтидоии Барномаи Нармафзори UMAG
        </h3>
        <Grid align="flex-start">
          <Grid.Col span={9}>
            <p className="tariffs-description-text">
              Ҳангоми пайвастшавии аввалин пардохти якдафъаина ба маблағи 30 000 танга барои насб кардани таҷҳизот бо нармафзор барои як нуқтаи савдо гирифта мешавад. Баъдан шумо танҳо пардохтҳои моҳонаро мувофиқи тарфи худ пардохт мекунед.
            </p>
          </Grid.Col>
          <Grid.Col span={3}>
            <Flex justify="center">
              <button className="tariffs-description-btn">
                Маълумоти бештар
              </button>
            </Flex>
          </Grid.Col>
        </Grid>
      </Flex>
    </div>
  );
};
