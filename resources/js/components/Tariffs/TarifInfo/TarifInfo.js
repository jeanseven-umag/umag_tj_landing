import { Card, Flex, Grid } from "@mantine/core";

export const TarifInfo = () => {
  return (
    <div className="tariffs-info-block">
      <Flex direction="column">
        <h2 className="tariffs-info-caption">В стоимость входит</h2>
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
                      Консультация по телефону
                    </h3>
                    <p className="tariffs-info-card-text">
                      По всем интересующим вас вопросам, наша команда вас
                      проконсультирует
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
                      Настройка оборудования
                    </h3>
                    <p className="tariffs-info-card-text">
                      Специалисты выезжают к вам на точку и настраивают все
                      необходимое оборудование
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
                      Установка необходимого ПО
                    </h3>
                    <p className="tariffs-info-card-text">
                      Помимо установки оборудования наши специалисты помогут в
                      настройке необходимого программного обеспечения
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
                      Обучение сотрудников магазина
                    </h3>
                    <p className="tariffs-info-card-text">
                      Мы полностью обучим всем необходимым навыкам для владения
                      программой Umag
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
                      Выезд специалиста
                    </h3>
                    <p className="tariffs-info-card-text">
                      Наши коллеги окажут вам поддержку при любых неполадках
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
                      Техническая поддержка
                    </h3>
                    <p className="tariffs-info-card-text">
                      Полное сопровождение и поддержка 24/7
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
