import { Card, Flex, Grid } from "@mantine/core";

export const TarifInfo = () => {
  return (
    <div className="tariffs-info-block">
      <Flex direction="column">
        <h2 className="tariffs-info-caption">Ба нарх дохил аст</h2>
        <Grid gutter={40}>
          <Grid.Col span={4}>
            <Card
              shadow="sm"
              padding="lg"
              radius={50}
              withBorder
              className="tariffs-info-card"
            >
              <Card.Section p={40}>
                <Flex direction="column" justify="space-between">
                  <Flex
                    direction="column"
                    pos="relative"
                    style={{ height: "230px" }}
                  >
                    <h3 className="tariffs-info-card-caption">
                      Машварат тавассути телефон
                    </h3>
                    <p className="tariffs-info-card-text">
                      Барои ҳамаи саволҳои шумо, дастаи мо ба шумо машварат медиҳад
                    </p>
                    <img
                      className="tariffs-info-card-img"
                      src="/images/tarif-discussion.png"
                      alt="discussion"
                    />
                  </Flex>
                </Flex>
              </Card.Section>
            </Card>
          </Grid.Col>
          <Grid.Col span={4}>
            <Card
              shadow="sm"
              padding="lg"
              radius={50}
              withBorder
              className="tariffs-info-card"
            >
              <Card.Section p={40}>
                <Flex direction="column" justify="space-between">
                  <Flex
                    direction="column"
                    pos="relative"
                    style={{ height: "230px" }}
                  >
                    <h3 className="tariffs-info-card-caption">
                      Танзими таҷҳизот
                    </h3>
                    <p className="tariffs-info-card-text">
                      Муттахассисон ба ҷои шумо меоянд ва тамоми таҷҳизоти лозимаро танзим мекунанд
                    </p>
                    <img
                      className="tariffs-info-card-img"
                      src="/images/tarif-settings.png"
                      alt="settings"
                    />
                  </Flex>
                </Flex>
              </Card.Section>
            </Card>
          </Grid.Col>
          <Grid.Col span={4}>
            <Card
              shadow="sm"
              padding="lg"
              radius={50}
              withBorder
              className="tariffs-info-card"
            >
              <Card.Section p={40}>
                <Flex direction="column" justify="space-between">
                  <Flex
                    direction="column"
                    pos="relative"
                    style={{ height: "230px" }}
                  >
                    <h3 className="tariffs-info-card-caption">
                      Насби нармафзори лозима
                    </h3>
                    <p className="tariffs-info-card-text">
                      Ғайр аз насби таҷҳизот, мутахассисони мо дар танзими нармафзори лозима кӯмак мекунанд
                    </p>
                    <img
                      className="tariffs-info-card-img"
                      src="/images/tarif-good.png"
                      alt="good"
                    />
                  </Flex>
                </Flex>
              </Card.Section>
            </Card>
          </Grid.Col>
          <Grid.Col span={4}>
            <Card
              shadow="sm"
              padding="lg"
              radius={50}
              withBorder
              className="tariffs-info-card"
            >
              <Card.Section p={40}>
                <Flex direction="column" justify="space-between">
                  <Flex
                    direction="column"
                    pos="relative"
                    style={{ height: "230px" }}
                  >
                    <h3 className="tariffs-info-card-caption">
                      Омӯзиши кормандони мағоза
                    </h3>
                    <p className="tariffs-info-card-text">
                      Мо ҳамаи малакаҳои лозимаро барои истифодаи барномаи Umag пурра меомӯзонем
                    </p>
                    <img
                      className="tariffs-info-card-img"
                      src="/images/tarif-calc.png"
                      alt="calculator"
                    />
                  </Flex>
                </Flex>
              </Card.Section>
            </Card>
          </Grid.Col>
          <Grid.Col span={4}>
            <Card
              shadow="sm"
              padding="lg"
              radius={50}
              withBorder
              className="tariffs-info-card"
            >
              <Card.Section p={40}>
                <Flex direction="column" justify="space-between">
                  <Flex
                    direction="column"
                    pos="relative"
                    style={{ height: "230px" }}
                  >
                    <h3 className="tariffs-info-card-caption">
                      Ба ҷои шумо омадани мутахассис
                    </h3>
                    <p className="tariffs-info-card-text">
                      Ҳамкорони мо ба шумо дар ҳама гуна мушкилот кӯмак мерасонанд
                    </p>
                    <img
                      className="tariffs-info-card-img"
                      src="/images/tarif-superman.png"
                      alt="superman"
                    />
                  </Flex>
                </Flex>
              </Card.Section>
            </Card>
          </Grid.Col>
          <Grid.Col span={4}>
            <Card
              shadow="sm"
              padding="lg"
              radius={50}
              withBorder
              className="tariffs-info-card"
            >
              <Card.Section p={40}>
                <Flex direction="column" justify="space-between">
                  <Flex
                    direction="column"
                    pos="relative"
                    style={{ height: "230px" }}
                  >
                    <h3 className="tariffs-info-card-caption">
                      Дастгирии техникӣ
                    </h3>
                    <p className="tariffs-info-card-text">
                      Ҳамроҳӣ ва дастгирии пурра 24/7
                    </p>
                    <img
                      className="tariffs-info-card-img"
                      src="/images/tarif-crown.png"
                      alt="crown"
                    />
                  </Flex>
                </Flex>
              </Card.Section>
            </Card>
          </Grid.Col>
        </Grid>
      </Flex>
    </div>
  );
};
